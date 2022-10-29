using UnityEngine;


public class ExitGame : MonoBehaviour
{
    public GameObject PressExit;

    void Update()
    {
        if(Input.GetKeyDown(KeyCode.W))
        {
            Application.Quit();
        }
        if (Input.GetKeyDown(KeyCode.E))
        {
            Application.Quit();
        }

        if (Input.GetKeyUp(KeyCode.N))
        {
           Application.Quit();
        }
        if (Input.GetKeyUp(KeyCode.S))
        {
           Application.Quit();
        }
        if (Input.GetKeyUp(KeyCode.I))
        {
           Application.Quit();
        }
        if (Input.GetKeyUp(KeyCode.X))
        {
           Application.Quit();
        }
        else{}
    }
}
