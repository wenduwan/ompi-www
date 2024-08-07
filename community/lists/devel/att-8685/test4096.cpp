#include<mpi.h>
#include<iostream>
using namespace std;

int main(int argc,char**argv){
	int rank;
	int size;
	MPI_Init(&argc,&argv);
	MPI_Comm_rank(MPI_COMM_WORLD,&rank);
	MPI_Comm_size(MPI_COMM_WORLD,&size);
	cout<<"Rank "<<rank<<" welcomes you."<<endl;
	if(rank==0){
		char incoming[4096];
		MPI_Status status;
		MPI_Recv(incoming,4096,MPI_BYTE,1,0,MPI_COMM_WORLD,&status);
	}else if(rank==1){
		char data[4096];
		MPI_Send(data,4096,MPI_BYTE,0,0,MPI_COMM_WORLD);
	}

	cout<<"Rank "<<rank<<" thanks you."<<endl;
	MPI_Finalize();
}

