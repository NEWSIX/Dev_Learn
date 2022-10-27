using System;
namespace OOP
{
    class Program
    {
        
        static void Main(string[] args)
        {

            //Employee emp1 = new Employee();
            //Console.WriteLine(emp1.Password);
            //string login_1st = emp1.Login("Admin","123admin");
            //Console.WriteLine(login_1st);

            //emp1.ChangeUsername("Admin", "NEWSIX!!!!");


            //string changePassword = emp1.ChangePassword("123admin","NEWSIX5510");
            //Console.WriteLine(changePassword);


            //string login_2nd = emp1.Login("Admin", "123admin");
            //Console.WriteLine(login_2nd);

            //string changeUsernameAndPassword = emp1.ChangeUsernameAndPassword("321seq", "Niti", "");
            //Console.WriteLine(changeUsernameAndPassword);

            //emp1.ShowDetails();


            //string login_3rd = emp1.Login("Niti","");
            //Console.WriteLine(login_3rd);
            //emp1.Password = "HÄAAAAHIIIII";

            //Console.WriteLine(emp1.Password);


            Employee emp1 = new Accounting("Smith",38000,"MEN");
            Employee emp2 = new Sale("Lucy",120000,"Bangkok");
            Employee emp3 = new IT("Emily",300000,3);

            Employee emp4 = new Accounting("Zusan", 1200, "WOMEN");


            Console.WriteLine("\nDepartment Accounting");
            Console.WriteLine("Name :\t{0} \nSalary :\t{1} \nGender :\t{2}", emp1.Name, emp1.Salary , emp1.Gender);
            Console.WriteLine("\nDepartment Sale");
            Console.WriteLine("Name :\t{0} \nSalary :\t{1}", emp2.Name, emp2.Salary);
            Console.WriteLine("\nDepartment IT");
            Console.WriteLine("Name :\t{0} \nSalary :\t{1}", emp3.Name, emp3.Salary);
            Console.WriteLine("\nDepartment Accounting");
            Console.WriteLine("Name :\t{0} \nSalary :\t{1}", emp4.Name, emp4.Salary);


        }
    }
}
