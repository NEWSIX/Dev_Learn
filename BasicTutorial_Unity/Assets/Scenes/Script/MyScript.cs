using System.Threading;
//using System.Numerics;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class MyScript : MonoBehaviour
{
    public float speed = 10.0f;
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
    }
    void FixedUpdate()
    {
        movePlayer(movement);
    }
    void movePlayer(Vector3 direction)
    {
        //rb.velocity  = direction * speed;
        rb.MovePosition(transform.position + direction * speed * Time.deltaTime );
    }
}
