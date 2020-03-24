#include <iostream>

using namespace std;

int main()
 {
 	int n1, n2, n3,n4 ;
 	cin >> n2;
 	n1=n2%4;
 	n3=n2%400;
 	n4=n2%100;


 	if ((n3==0 )or ((n1==0 )and (n4!=0))){
 		cout << " 1 " << endl;
	 }
	else {
		cout << " 0 " << endl;
	}
	return 0;
