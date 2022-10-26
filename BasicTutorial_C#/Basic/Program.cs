using System;

namespace MyApplication
{
  class Program
  {
    static void Main(string[] args)
    {
      try{
        Console.WriteLine("Enter number:");
        string input = Console.ReadLine();
        int num = 100/int.Parse(input);
        Console.WriteLine("Result is: " + num);
      }
      catch(FormatException){
        Console.WriteLine("\nError 0!\n");
      }
      catch(Exception){
        Console.WriteLine("\nError Other.\n");
      }
      finally{
        
      }

      
    }
  }
}