using System;
namespace OOP
{
    public class Accounting : Employee , General
    {
        private string gender;
        public Accounting(string name, int salary, string gender) :base(name, salary)
        {
            this.gender = gender;
        }

        public override double reportIncome()
        {
            return base.Salary * 12;
        }

        public string showBonus()
        {
            return "Bonus 35%";
        }

        public override void showEmployee()
        {
            base.showEmployee();
            Console.WriteLine("Gender :\t" + this.gender);
        }

        public void showUniform()
        {
            Console.WriteLine("Uniform : White");
        }
    }
}
