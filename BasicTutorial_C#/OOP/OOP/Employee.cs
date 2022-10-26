using System;
namespace OOP
{
    public class Employee{

        private string name = "NEWSIX";
        private int cost = 99921;
        private int token = 1002912;

        public Employee(){
            Console.WriteLine("\nNEWSIX IS HERE !\n"+this.token);
        }

        public Employee(string a,int b , int c)
        {
            if (a == "NEWSIX" && b == 12 && c == token) { Console.WriteLine(true); }
            else Console.WriteLine(false);
           
        }

    }
}
