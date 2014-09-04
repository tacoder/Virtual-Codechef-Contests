<?php require("../../includes/header.php"); ?><h1>Combination Generator</h1><div class="content">

<style type="text/css">
p
{
font-size:14px;
text-align:justify;
}

</style><p>Two positive integers n amd m, n greater than or equal to m, will be given as input.<br /> <br />
Make a code that generates all possible combinations of 1,2,3,...,n taking m integers at a time in "increasing order".</p>
<p>
Comparison between two combinations:<br />
a1,a2,a3,...,am<br />
b1,b2,b3,...,bm<br />
Let i be the smallest number such that ai is not equal to bi.<br />
If ai is greater than bi then the first combination is greater than the second one and vice versa. </p>
<p></p>
<h3>Input:</h3>
<pre>n
m<br /></pre><h3>Output:</h3>
<pre>a1 a2 a3 ... am
b1 b2 b3 ... bm
.
.
.
<br /></pre><p>Note:<br />
1.) Each of ai,bi,...  for all 1=<i&lt;=m is greater than or equal to 1 and less than or equal to n.<br />
2.) The combinations should be printed in increasing order.<br />
3.) n will be less than or equal to 50 and (n-m)&lt;=45.  </i&lt;=m></p>
<p></p>
<h3>Example:</h3>
<p><b>Input:</b><br/><br/></br/></br/></p>
<pre><code>5
3</code></pre><p><br/><br/><br />
<b>Output:</b><br/><br/></br/></br/></br/></br/></p>
<pre><code>1 2 3 
1 2 4
1 2 5
1 3 4
1 3 5
1 4 5
2 3 4
2 3 5
2 4 5
3 4 5</code></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pankajb64">pankajb64</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.25 - 5.4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>BF, C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>