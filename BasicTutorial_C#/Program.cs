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
  enum Level{
    lv1,lv2,lv3,lv4,lv5
  }
  class main{
    static void Main(string[] agrs){  

      Console.WriteLine((int)Level.lv1);
      
      ValueStr[] V2 = new ValueStr[3];

      V2[0].SetValue(1,true,"NO1");
      V2[1].SetValue(2,true,"NO2s");
      V2[2].SetValue(3,true,"NO3s");

      //V2[0].ShowValue();

    }
  }
