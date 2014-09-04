<?php require("../../includes/header.php"); ?><h1>Algorithm Challenge</h1><div class="content">

<style type="text/css">
p
{
font-size:14px;
text-align:justify;
}
.code25
{

display:block;
font-size:14px;
font-weight:bold
}
</style><p>Shekhar is your best friend. He loves playing algorithmic games with you wherein one person poses a problem and the other one designs an algorithm for it. Its Shekhar's turn to give you a problem and he claims to have a nice little problem for you.</p>
<p>
You are given a sorted array (with distinct integers) and you need to find out the location of maximum element in the array. However the problem has a twist.</p>
<p>
Shekhar breaks the array at two random points, so that you now have three ( nonempty) subarrays. Furthermore, he picks ANY Two of the three subarrays and swaps their position. While he considers you as his Idol, he is fairly confident this is more than a piece of cake for you. </p>
<p>
Your task, obviously, is to  form an algorithm that finds the index where the maximum element is located.
</p>
<h3>Input</h3>
<p>First line of the input will contain the number of Test cases T ( T&lt;= 100)<br/><br />
For each test case, there are two lines. <br/><br />
First line contains one integer <b>L</b> which represents the length of the array. <br/>Second line contains the rearranged array after swapping of two sub-arrays<br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>For each test case, the output should contain one single integer indicating the index of the element with the maximum value in the array.</p>
<h3>Constraints</h3>
<pre><b>
T &lt;= 100
L &lt;= 100
1 &lt;= i &lt;= j &lt;= L</b></pre><p> ( <b>i</b> and <b>j</b> are the indices after which the division takes place - their values will be random and will not be provided)</p>
<h3>Example</h3>
<p><b>Input:</b><br/><br/></br/></br/></p>
<pre><code >1
6
5 6 3 4 1 2</code></pre><p><br/><br/><br />
<b>Output:</b><br/><br/></br/></br/></br/></br/></p>
<pre><code>2</code></pre><p><br/><br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pankajb64">pankajb64</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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