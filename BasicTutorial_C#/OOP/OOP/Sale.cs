using System;
namespace OOP
{
    public class Sale:Employee , General
    { 
        private string area;
        private double commission = 10000;
        public Sale(string name, int salary, string area) : base(name, salary)
        {
            this.area = area;
        }

        public override double reportIncome()
        {
            return (base.Salary * 12) + (commission * 12);
        }

        public string showBonus()
        {
            return "Bonus 32%";
        }

        public override void showEmployee()
        {
            base.showEmployee();
            Console.WriteLine("Area :\t" + this.area);
        }

        public void showUniform()
        {
            Console.WriteLine("Uniform : Green");
        }
    }
}
