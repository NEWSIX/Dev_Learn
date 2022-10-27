using System;
namespace OOP
{
    /*
    public class Employee{

        private string username = "Admin";
        private string password = "123admin";
        private string token = "321seq";

        public string Username { get => username; set => username = value; }
        public string Password { get => password; set => password = value; }
        public string Token { get => token; set => token = value; }

        public string Login(string username, string password)
        {
            if(this.Username == username && this.Password == password){
                return "Result :\tLogin Pass!\n";
            }
            else { return "Result :\tLogin Failed.\n";  }

        }
        public string ChangeUsername(string username, string newUsername)
        {
            if (this.Username == username)
            {
                this.Username = newUsername;
                return "Result :\tUsername Changed.\n";
            }
            else { return "Result :\tInvalid.\n"; }

        }
        public string ChangePassword(string password,string newPassword)
        {
            if (this.Password == password)
            {
                this.Password = newPassword;
                return "Result :\tPassword Changed.\n";
            }
            else { return "Result :\tInvalid.\n"; }

        }
        public string ChangeUsernameAndPassword(string token,string newUsername, string newPassword)
        {
            if (this.Token == token)
            {
                this.Username = newUsername;
                this.Password = newPassword;
                return "Result :\tUsename and Password have been Changed.\n";
            }
            else { return "Result :\tInvalid.\n"; }

        }
        public void ShowDetails()
        {
            Console.WriteLine(" \t--ShowDetail--\nUSERNAME : \t{0}\nPassword : \t{1}\nToken : \t{2}", this.Username, this.Password, this.Token);
        }


    }
    */


    
 
    public abstract class Employee
    {
        private string name;
        private int salary;


        protected string officeName = "NITIGON";

        public Employee()
        {
            //Console.WriteLine("CREATE EMPLOYEE OBJECT!");
        }

        public  Employee(string name,int salary) {
            this.Name = name;
            this.Salary = salary;
        }

        public string Name { get => name; set => name = value; }
        public int Salary { get => salary; set => salary = value; }


        public virtual void showEmployee()
        {
            Console.WriteLine("==============================");
            Console.WriteLine("Name :\t"+this.name);
            Console.WriteLine("Salary :\t" + this.salary);
           
        }
        public abstract double reportIncome();

    }

}
