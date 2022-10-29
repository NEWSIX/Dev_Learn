using UnityEngine;


public class ExitGame : MonoBehaviour
{
    public GameObject PressExit;

    void Update()
    {
        if(Input.GetKeyDown(KeyCode.Q))
        {
            Application.Quit();
        }
        if (Input.GetKeyDown(KeyCode.Space))
        {
            Application.Quit();
        }

        if (Input.GetKeyUp(KeyCode.Space))
        {
           Application.Quit();
        }
        else{}
    }
}
