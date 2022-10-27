using System;
namespace OOP
{
    public class Employee{

        private string username = "Admin";
        private string password = "123admin";
        private string token = "321seq";

        public string Login(string username, string password)
        {
            if(this.username == username && this.password == password){
                return "Result :\tLogin Pass!\n";
            }
            else { return "Result :\tLogin Failed.\n";  }
            
        }
        public string ChangeUsername(string username, string newUsername)
        {
            if (this.username == username)
            {
                this.username = newUsername;
                return "Result :\tUsername Changed.\n";
            }
            else { return "Result :\tInvalid.\n"; }

        }
        public string ChangePassword(string password,string newPassword)
        {
            if (this.password == password)
            {
                this.password = newPassword;
                return "Result :\tPassword Changed.\n";
            }
            else { return "Result :\tInvalid.\n"; }

        }
        public string ChangeUsernameAndPassword(string token,string newUsername, string newPassword)
        {
            if (this.token == token)
            {
                this.username = newUsername;
                this.password = newPassword;
                return "Result :\tUsename and Password have been Changed.\n";
            }
            else { return "Result :\tInvalid.\n"; }

        }
        public void ShowDetails()
        {
            Console.WriteLine(" \t--ShowDetail--\nUSERNAME : \t{0}\nPassword : \t{1}\nToken : \t{2}", this.username, this.password, this.token);
        }

    }
}
