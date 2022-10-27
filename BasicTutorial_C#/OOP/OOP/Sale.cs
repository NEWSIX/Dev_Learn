using System;
namespace OOP
{
    public class Sale:Employee
    { 
        private string area;
        public Sale(string name, int salary, string area) : base(name, salary)
        {
            this.area = area;

        }
    }
}
