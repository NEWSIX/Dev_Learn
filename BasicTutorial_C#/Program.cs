//using Internal;
using System.Collections.Generic;
using System;


  struct ValueStr
  {
  public int a ;
  public bool b ;
  public string c ;  
  public void SetValue (int A,bool B , string C ){
    a = A;
    b = B;
    c = C;
  }
  public void ShowValue (){
    Console.WriteLine(a);
    Console.WriteLine(b);
    Console.WriteLine(c);
  }

  }
  class main{
    static void Main(string[] agrs){
    ValueStr V1 = new ValueStr();
    V1.SetValue(12,true,"12312s");
    V1.ShowValue();

    }
  }
