#include<bits/stdc++.h>
using namespace std;
int main()
{
	for(int i=1;i<=9;i++)
	{
		string name = "";
		name += i + 'A';
		name += ".html";
		cout<<"Generating "<<name<<endl;
		ofstream fout(name.c_str());
		if(!fout)
		{
			cout<<"Error creating file:"<<name;
			continue;
		}
		fout<<"<html><head><style>body{background-image:url(\' ("<<i<<").jpg\');}</style></head></html>";
	}
	return 0;
}
/*
<html><head><style>body{background-image:url('cat.png');}</style></head></html>

*/