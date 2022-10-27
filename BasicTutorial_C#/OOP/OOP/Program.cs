using System;
using System.Collections.Generic;
namespace OOP
{
    class Program
    {

        struct InputValues
        {
            public string employeeName;
            public int employeeSalary;
            public int employeeExperience;
        }

        static void Main(string[] args)
        {
            /*
            Employee emp1 = new Employee();
            Console.WriteLine(emp1.Password);
            string login_1st = emp1.Login("Admin","123admin");
            Console.WriteLine(login_1st);

            emp1.ChangeUsername("Admin", "NEWSIX!!!!");


            string changePassword = emp1.ChangePassword("123admin","NEWSIX5510");
            Console.WriteLine(changePassword);


            string login_2nd = emp1.Login("Admin", "123admin");
            Console.WriteLine(login_2nd);

            string changeUsernameAndPassword = emp1.ChangeUsernameAndPassword("321seq", "Niti", "");
            Console.WriteLine(changeUsernameAndPassword);

            emp1.ShowDetails();


            string login_3rd = emp1.Login("Niti","");
            Console.WriteLine(login_3rd);
            emp1.Password = "HÄAAAAHIIIII";

            Console.WriteLine(emp1.Password);
            */
            /*
            InputValues input = new InputValues();

            Console.WriteLine("Enter Name:");
            input.employeeName = Console.ReadLine();

            Console.WriteLine("Enter Salary:");
            input.employeeSalary = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Enter Experience:");
            input.employeeExperience = Convert.ToInt32(Console.ReadLine());

            */

            Accounting emp1 = new Accounting("Smith",38000,"MEN");
            Sale emp2 = new Sale("Lucy",120000,"Bangkok");
            IT emp3 = new IT("Emily",300000,3);
            Accounting emp4 = new Accounting("Zusan", 12000, "WOMEN");
            // Employee empInput = new IT(input.employeeName,input.employeeSalary,input.employeeExperience);

            /*
            
            Console.WriteLine("\nDepartment Accounting");
            Console.WriteLine("Name :\t{0} \nSalary :\t{1}", emp1.Name, emp1.Salary);
            Console.WriteLine("Income : \t"+emp1.reportIncome());
            Console.WriteLine("Name :\t{0} \nSalary :\t{1}", emp4.Name, emp4.Salary);
            Console.WriteLine("Income : \t" + emp4.reportIncome());

            Console.WriteLine("\nDepartment Sale");
            Console.WriteLine("Name :\t{0} \nSalary :\t{1}", emp2.Name, emp2.Salary);
            Console.WriteLine("Income : \t" + emp2.reportIncome());

            Console.WriteLine("\nDepartment IT");
            Console.WriteLine("Name :\t{0} \nSalary :\t{1}", emp3.Name, emp3.Salary);
            Console.WriteLine("Income : \t" + emp3.reportIncome());
            */

            /*
            Console.WriteLine("\n\tShow Data");
            emp1.showEmployee();
            emp2.showEmployee();
            emp3.showEmployee();
            emp4.showEmployee();
            empInput.showEmployee();
            Console.WriteLine("==============================");
            */
            /*
            Company.addEmployee(emp1);
            Company.addEmployee(emp2);
            Company.addEmployee(emp3);
            Company.addEmployee(emp4);
            Company.addEmployee(new Sale("Walt",23900,"KhonKean"));

            Company.getEmployee();
            */
            Console.WriteLine(emp1.showBonus());
            emp3.showUniform();
        }
    }
}
