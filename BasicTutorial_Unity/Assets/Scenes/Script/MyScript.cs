//using System.Diagnostics;
using System.Threading;
//using System.Numerics;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class MyScript : MonoBehaviour
{
    public float speed = 50.0f;
    private Rigidbody rb;
    public Vector3 movement;


    // Start is called before the first frame update
    void Start()
    {
        rb =  GetComponent<Rigidbody>();
    }
    // Update is called once per frame
    void Update()
    {
        float x = Input.GetAxis("Horizontal");
        float z = Input.GetAxis("Vertical");
        float y = Input.GetAxis("Jump");
        movement = new Vector3(x,y,z);

        if(Input.GetMouseButtonDown(0)){
            transform.Rotate(0f,1f*speed,0f);
        }
        if(Input.GetMouseButtonDown(1)){
            transform.Rotate(0f,-1f*speed,0f);
        }
        if(Input.GetMouseButtonDown(2)){
            transform.Rotate(-1f*speed,0f,0f);
        }


        if (Input.GetAxis("Mouse ScrollWheel") > 0f ) // forward
        {
             transform.Rotate(0f,0f,1f*speed);
        }
        else if (Input.GetAxis("Mouse ScrollWheel") < 0f ) // backwards
        {
            transform.Rotate(0f,0f,-1f*speed);
        }

    }
    void FixedUpdate()
    {
        movePlayer(movement);
    }
    void movePlayer(Vector3 direction)
    {
        //rb.velocity  = direction * speed;
       // rb.MovePosition(transform.position + direction * speed * Time.deltaTime );
        rb.AddForce(direction * speed);
        
    }
}