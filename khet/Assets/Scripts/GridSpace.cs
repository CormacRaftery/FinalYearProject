using System.Collections;
using System.Collections.Generic;
using System.Diagnostics;
using System.Globalization;
using System.Reflection;
using UnityEngine;
using UnityEngine.UI;
public class GridSpace : MonoBehaviour
{
    /*   // Start is called before the first frame update
       void Start()
       {

       }

       // Update is called once per frame
       void Update()
       {

       }*/

    public Button button;
    public Text buttonText;
    public string playerSide;
    public int horizontalRow;
    public int verticalRow;

    public void SetSpace()
    {
        //buttonText.text = playerSide;
        //button.interactable = false;
       // EventLog("piece selected" + button);
        print("piece selected" + button);

        if (buttonText.text == "Pyramid")
        {
            buttonText.text = playerSide;
            button.interactable = false;
        }
        
    }
}
