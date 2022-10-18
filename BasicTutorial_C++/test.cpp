#include <iostream>
using namespace std;

int main ()
{
int c,C=0;
int b;
int i = 0;


for ( i = 0; i < 5; i++)
{
  cout<< "_____\nItem :"<<i+1<< "of 5\n";
  cout << "Price :\t";
  cin >> c ;
  C=C+c; 
}
cout <<"\nTotal:\t" <<C <<"$\n";

}


