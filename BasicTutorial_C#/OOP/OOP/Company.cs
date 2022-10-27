using System;
using System.Collections.Generic;

namespace OOP
{
    sealed class Company
    {
        public static string cname = "NEWSIX Plus+";
        public static string founder = "NEWSIX";
        public static List<Employee> employee = new List<Employee>();


        public static void addEmployee(Employee person)
        {
            employee.Add(person);
        }

        public static void getEmployee()
        { int i = 0;
            foreach(Employee obj in employee)
            {

                obj.showEmployee();
                Console.WriteLine("Income :\t"+obj.reportIncome());
            }
            
        }
    }
   
}
