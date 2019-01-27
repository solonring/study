#include <stdio.h>
#include <stdlib.h>
#define N 6

main()
{
	int i;
	int j;
	int temp;
	int dud[N] = {3, 10, 34, 10, 40, 13};
	for(i = 1; i < N; i++){
		for(j = 0; j < N-i; j++){
			if(dud[j] < dud[j+1]){
				temp = dud[j];
				dud[j] = dud[j+1];
				dud[j+1] = temp;
			}
		}
	}

	for(i = 0; i < N; i++){
		printf("%d\t",dud[i]);
	}
	
	printf("\n");
}
