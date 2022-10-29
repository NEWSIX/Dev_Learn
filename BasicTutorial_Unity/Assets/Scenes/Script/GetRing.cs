using System.Collections;
using System.Collections.Generic;
//using static System.Collections.IEnumerable;
using UnityEngine;
using TMPro;
//using System;
using static UnityEngine.Random;
using UnityEngine.SceneManagement;
 
public class GetRing : MonoBehaviour
{
    // void OnCollisionEnter(Collision target)
    // {
    //     if(target.gameObject.tag.Equals("Ring")){
    //         Destroy(target.gameObject);
    //     }
    // }

    private int score = 0;
    private int rndNum = 0;
    // private int rndP1 = 0;
    // private int rndP2 = 0;
    // private int rndP3 = 0;
    public TextMeshProUGUI scoreText;
    private AudioSource audioSource;
    public AudioClip RingSound;
    public AudioClip LastRing;
    
    private void Start() {
        audioSource = GetComponent<AudioSource>();
        rndNum = Random.Range(10, 30)*100;
        audioSource.PlayOneShot(LastRing);
        //rndNum = 300;
        
    }
    void OnTriggerEnter(Collider target)
    {
        scoreText = FindObjectOfType<TextMeshProUGUI>();
          if(target.gameObject.tag.Equals("Ring")){
            score += 100;
            scoreText.text = score+" of "+rndNum;
            if(score >= rndNum){
                //audioSource.PlayOneShot(LastRing);
                NextLevel();
                //StartCoroutine(NextLevel());
            }
                
            else
                audioSource.PlayOneShot(RingSound);
         }
        SpawnAndDestroy(target.gameObject,2);
          
    }

    void SpawnAndDestroy(GameObject prefab, float delay)
            {   
               int rndX = Random.Range(-3, 3);
                int rndY = Random.Range(0, 3);
                int rndZ = Random.Range(-3, -3);

                GameObject BoxClone = Instantiate(prefab) as GameObject;
                BoxClone.transform.position = transform.position + new Vector3(rndX,rndY,rndZ);
                //GameObject newGO = Instantiate(prefab) as GameObject;
                Destroy(prefab.gameObject);
                
            }
    void NextLevel(){
        //yield return new WaitForSeconds(6);
        SceneManager.LoadScene("EndGame");
    }
}
