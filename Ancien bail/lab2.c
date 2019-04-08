
#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <sys/types.h>
#include <sys/shm.h>
#include <sys/wait.h>
#define KEY 4567
#define PERMS 0660
int main(int argc, char **argv) {
  int id;
  int i;
  int *ptr;
  int a=5;
  int b=10;
  int c=20;
  int d=8;
  int e=2;
  int f=3;
  system("ipcs -m");
  id = shmget(KEY, sizeof(int), IPC_CREAT | PERMS);
  system("ipcs -m");

  ptr = (int *) shmat(id, NULL, 0);
  *ptr = 0;
  i = 54;
  if (fork() == 0) {
    (*ptr)++;
    i++;
    *ptr = *ptr * (c-d);
    printf("Value of *ptr = %d\nValue of i = %d\n", *ptr, i);
    exit(0);

    if(fork()==0))
     {
       *ptr = *ptr + e + f;
       printf("Value of *ptr = %d\nValue of i = %d\n", *ptr, i);
     }
  } else {
    wait(NULL);
    printf("Value of *ptr = %d\nValue of i = %d\n", *ptr, i);
    shmctl(id, IPC_RMID, NULL);
    *ptr = a + b;
  }
}
