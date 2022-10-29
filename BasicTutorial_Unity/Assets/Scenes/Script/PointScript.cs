using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PointScript : MonoBehaviour
{
    // Start is called before the first frame update

    public GameObject box;
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {   
        
        
        if(Input.GetMouseButtonDown(0)){

            GameObject BoxClone = Instantiate(box) as GameObject;
            BoxClone.transform.position = transform.position + new Vector3(0,10, 0);
        }

        if(Input.GetMouseButtonDown(1)){

            GameObject BoxClone = Instantiate(box) as GameObject;
            BoxClone.transform.position =  transform.position;
        }
    }
}
