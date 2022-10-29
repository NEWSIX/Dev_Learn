using UnityEngine;


public class GameManager : MonoBehaviour
{
    public GameObject pauseUI;
    
    void Start()
    {
        pauseUI.SetActive(false);
    }
    void Update()
    {
        if(Input.GetKeyDown(KeyCode.P))
        {
             if (Time.timeScale == 1.0f){
                Time.timeScale = 0;
                pauseUI.SetActive(true);
                AudioListener.pause = true;}
                
            else {
                Time.timeScale = 1;
                pauseUI.SetActive(false);
                AudioListener.pause = false;}
        }
    }
}
