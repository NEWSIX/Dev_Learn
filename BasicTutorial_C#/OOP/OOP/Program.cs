using System;
namespace OOP
{
    class Program
    {
        
        static void Main(string[] args)
        {
            Employee employee2 = new Employee();
            Employee employee1 = new Employee("NEWSIX",12,1002912);
            Console.WriteLine("\n"+employee1+employee2);
        }
    }
}
