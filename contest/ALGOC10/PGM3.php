<?php require("../../includes/header.php"); ?><h1>FunctionTrouble</h1><div class="content">

<p>	Write the comparison function qs_compare()for the following code: <br/><br />
struct date <br/><br />
	{ <br/><br />
	      int d,m,y; <br/><br />
	}; <br/><br />
qs_compare(const void*,const void*); <br/> <br/></br/></br/></br/></br/></br/></br/></br/></p>
<p>struct date  dd[1000];<br />
<br/><br />
void main() <br/><br />
	{ <br/><br />
	     int i,w,n; <br/><br />
	     w=sizeof(struct date); <br/><br />
            //Read the inputs<br/><br />
	     qsort(dd,n,w,qs_compare);//n is the number of dates <br/><br />
            //Print the result <br/><br />
	 } <br/><br />
 <br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<pre>
<h3>Input</h3>
5
17 11 62
24 8 78
17 11 62
16 12 76
19 2 94
<h3>Output</h3>
17-11-1962
17-11-1962
16-12-1976
24-8-1978
19-2-1994
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mariojuana">mariojuana</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CLOJ, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>