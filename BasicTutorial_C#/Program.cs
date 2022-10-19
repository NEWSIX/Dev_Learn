using System.Collections.Generic;
using System;

namespace AppABC{
  class main{
     static void Main(string[] agrs){
      Feature_A("NEWSIX","Admin","Admin");
      Feature_A("NITIGON","User","Admin",2);
    }
     static void Feature_A(string A = "BKK",string role = "User",string password = "",int song=0){
      Console.WriteLine("\nUSERNAME :\t"+A);
      Permission(role,password,song);
    }  
     static void Permission(string role , string password , int song){
      Console.WriteLine("Role\t:\t"+role);
      if(role == "Admin"){
        Admin.Ensure(password);
      }
      else if (role == "User"){
        play.music(song);
      }
      
    }
  }
  public class play{
    public static void music(int song){
      string[,] list = new string[,] { 
        {"N1 Band","PopB2" },
        {"C Band","ROCKaRock"},
        {"ประยวย","เราจะทำตามสัญญา"}
      };
     Console.WriteLine("MUSIC\t:\t{0} by {1}",list[song,1],list[song,0]);
    }
  }
  public class Admin{
    public static void Ensure(string Password){
      if(Password == "Admin"){
        Console.WriteLine("Password :\tCorrect!");
      }
      else{Console.WriteLine("Password :\tIncorrect!");}
    } 
  }
}