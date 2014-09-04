<?php require("../../includes/header.php"); ?><h1>Gomti the Cow</h1><div class="content">

<style type="text/css">
#gomticow
{
font-size:14px;
}
#gomticow p
{
text-align:justify;
}
</style><div id="gomticow">
<p>Gomti is a hungry and lazy cow. Her master is fed up with her because she does nothing useful. So now he has thought of a new  job for her, eating grass. She has a field in front of her with some weeds in it. Her job is to eat those weeds. But being lazy, she wants to do it as optimally as possible.</p>
<p>For simplicity lets assume that the field in front of her is divided in M X N squares such that she can stand exactly in one square at a time.  She wants to eat all the weed with minimum number of moves between time. But like in everysitutaion of life, there are obstacles in her path. </p>
<h3>Input</h3>
<p>
The first line of input consists of number of test cases T.<br />
For each test case the first line consists two values "b" followed by "l", the breadth and length of the field. "l" each containing "b" values with each value indicating the possible type of sqaures (see below for more information).</p>
<p><br/><br/></br/></br/></p>
<pre>
b l
s11 s12 s13 ... s1b
s21 s22 s23 ... s2b
...
sl1 sl2 sl3 ... slb
</pre><p><br/><br/></br/></br/></p>
<p>
The integers l and b are the length and breadth of the field in terms of number of sqaures. s(a,b) or sab represnts what type of sqaures it is. To state it more clearly, there are four kinds of squares,</p>
<h3>"0" - represents an empty space that has neither a weed nor a obstacle, she can move through such a sqaure with no trouble at all 
<p><br/><br/><br />
"+" - means that the square has a weed and she has to eat it and turn it into a "0"<br/><br/><br />
"." - means that the square has a stone in it - its an obstacle and she cant walk through it<br/><br/><br />
"c" - means that the cow starts on this position<br/><br/><br />
</br/></br/></br/></br/></br/></br/></br/></br/></p></h3>
<h3>Output</h3>
<p>For each "l" x "b" grid , your program should output a line containing the minimum number of moves taken by Gomti to eat all the weeds. In case there are weeds that cannot be reached, output "not possible".</p>
</div>
<h3>Constraints</h3>
<p>No of test cases T &lt;= 1000 <br/><br />
Length <b>l</b> and breadth <b>b</b> &lt;= 25</br/></p>
<h3>Sample</h3>
<p><b>Input</b></p>
<pre><code>2
5 5
....c
....+
....+
....+
....0
5 5
....c
...+.
....+
....+
....0
</code></pre><p><b> Output</b></p>
<pre><code>3
not possible</code></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>1.7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>BF, C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, JS, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>