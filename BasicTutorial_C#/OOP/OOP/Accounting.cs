using System;
namespace OOP
{
    public class Accounting : Employee
    {
        //public string gender;
        public Accounting(string name, int salary, string gender) :base(name, salary)
        {
            //this.gender = gender;
            Gender = gender;
        }

    }
}
