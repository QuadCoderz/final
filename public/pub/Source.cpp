#include<iostream>
#include<string>
#include<fstream>
#include<map>
using namespace std;
string inputMess;
string decoded;
map<string, int> m;
map<int, string> m2;

void Encoder()
{

	ifstream in("inputMessage.txt");
	ofstream out("encoded.txt");
	
	in >> inputMess;
	for (int i = 97; i < 123; i++){
		char c = (char)i;
		string temp = "";
		temp = temp + c + "";
		m[temp] = i;
	}

	int counter = 123;
	string p = "", c = "";
	p = p + inputMess[0] + "";
	string pc = p + c;

	for (int i = 1; i < inputMess.size(); i++){
		c = "";
		c = c + inputMess[i] + "";
		pc = p + c;

		if (m.count(pc)){
			p = pc;
		}
		else {
			m[pc] = counter;
			out << m[p] << endl;
			counter++;
			p = c;
		}

	}
	out << m[p];
}


void check(){



	ifstream myfile1("Decoded.txt");
	if (myfile1.is_open()){
		myfile1 >> decoded;

		myfile1.close();
	}

	if (inputMess == decoded){

		cout << "two files are the same.";
	}
	else
		cout << "not the same.";

}


void Decoder()
{
	ifstream in("Encoded.txt");


	ofstream out("Decoded.txt");;

	


	for (int i = 97; i<123; i++)
	{
		char x = (char)i;
		string s = "";
		s = s + x + "";
		m2[i] = s;
	}
	int count = 123;
	int cw, pw;

	in >> cw;

	out << m2[cw];
	pw = cw;
	string p;
	string x;
	char c;
	while (in >> cw)
	{

		if (m2.count(cw))
		{
			out << m2[cw];

			p = m2[pw];
			x = m2[cw];
			c = x[0];
			m2[count] = p + c;
			count++;
			pw = cw;
		}
		else
		{
			p = m2[pw];
			c = (char)p[0];
			out << p + c;
			m2[count] = p + c;
			count++;
			pw = cw;
		}

	}

	out.close();
	return;
}


void printDict(){


	ofstream EncDict("EncDict.txt");
	ofstream DecDict("DecDict.txt");

	map<string,int>::iterator it1;
	map<int, string>::iterator it2;
	for (it1 = m.begin(); it1 != m.end();it1++){
		EncDict << it1->first << " " << it1->second << "\n";
	}
	for (it2 = m2.begin(); it2 != m2.end(); it2++){
		DecDict << it2->first << " " << it2->second << "\n";
	}
}
void main(){





	Encoder();
	Decoder();
	check();
	printDict();
	system("pause");


}

