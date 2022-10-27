using System;
namespace OOP
{
    public class IT:Employee , General
    {
        private int experience;
        public IT(string name, int salary, int experience) : base(name, salary)
        {
            this.experience = experience;
        }

        public override double reportIncome()
        {
            return (base.Salary * 12) * this.experience;
        }

        public string showBonus()
        {
            return "Bonus 87%";
        }

        public override void showEmployee()
        {
            base.showEmployee();
            Console.WriteLine("Experience :\t" + this.experience);
        }

        public void showUniform()
        {
            Console.WriteLine("Uniform : Black");
        }
    }
}
