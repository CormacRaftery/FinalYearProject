using System.Collections;
using System.Collections.Generic;
using System.Net.Cache;
using System.Runtime.InteropServices;
using UnityEngine;

using Debug = UnityEngine.Debug;

public class Webtest : MonoBehaviour
{
    // Start is called before the first frame update
    IEnumerator Start()
    {
        WWW request = new WWW("Http://localhost/sqlconnect/webtest.php");
        yield return request;
       string[] webResults = request.text.Split('\t');

        foreach(string s in webResults)
        {

        }
    }

}
