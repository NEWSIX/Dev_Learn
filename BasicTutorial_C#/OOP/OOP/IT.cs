using System;
namespace OOP
{
    public class IT:Employee
    {
        private int experience;
        public IT(string name, int salary, int experience) : base(name, salary)
        {
            this.experience = experience;

        }
    }
}
