<?php require("../../includes/header.php"); ?><h1>Help Munna</h1><div class="content">

<style type="text/css">
p
{
font-size:14px;
text-align:justify;
}
</style><p>Munnabhai needs a curtain rod of length L. He already has curtain rods of certain lengths but all are smaller than L. Munnabhai is a frugal man. He decides that if its possible to make a rod of length L by joining the smaller rods, he won't buy a new one. So firstly, given a set of rods, Munnabhai needs to determine whether he can make a rod of length L by joining the available rods(NOTE: If n rods of lengths l1,l2,...,ln are joined together, we get a rod of length l1+l2+...+ln). If this can be done, then he will choose a set of rods such that:<br /><br/><br />
1.) There are minimum number of joints in the final rod of length L.<br /><br/><br />
2.) Munnabhai's store-room is designed in a way that its infinitely more difficult to keep one larger rod as compared to any number of smaller rods. So he chooses the set accordingly.</br/></br/></p>
<p>(Example: For L=25, 10,10,5 is preferred over 10,9,6 because keeping(in the store or not using) a rod of length 10 is infinitely more difficult than keeping rods of lengths 9 and 6 together.) </p>
<p>Munnabhai gives greater priority to criteria (1) as compared to (2). </p>
<p></p>
<h3>Input:<br /></h3>
<pre>L
n
l1 p1
l2 p2
.    .
.    .
.    .
ln pn</pre><p><br/><br/></br/></br/></p>
<p>
where, L is the final rod length<br />
       n is the number of rod lengths available<br /> <br />
       l(i) is available rod-length   1&lt;=i&lt;=n<br />
       p(i) is the number of rods available of rod-length l(i)     1&lt;=i&lt;=n</p>
<p>Constraint:  L>l1>l2>...>ln>0<br />
             L,n,l1,l2,...,ln,p1,p2,...,pn are all positive integers<br />
             l1*p1 + l2*p2 + ... + ln*pn &lt; 999  </p>
<h3>Output:<br /></h3>
<pre>M
l1 q1
l2 q2
.  .
.  .
.  .
ln qn</pre><p><br/><br/><br />

<p>
where, M is the minimum number of rods needed<br />
             l(i) is available rod-length,     1&lt;=i&lt;=n <br />
             q(i) is the number of rods of rod-length l(i) used, 1&lt;=i&lt;=n </p>
<p>If it is not possible to make a rod of length L from the given set of rods, then<br /> <br />
Output: </p>
<p>Not possible to make a rod of length <b>L</b> from the given set of rods</p>
<h3>Example 1:</h3>
<p><b>Input:</b><br/><br/></br/></br/></p>
<pre><code>25
4
10  2
9  1
6  1
5  1</code></pre><p><br/><br/></br/></br/></p>
<p><b>Output:</b><br/><br/></br/></br/></p>
<pre><code>3
10  2
9  0
6  0
5  1</code></pre><p><br/><br/></br/></br/></p>
<h3>Example 2:</h3>
<p><br/><br/></br/></br/></p>
<p><b>Input:</b></p>
<pre><code>25
3
10  1
9  1
5  1</code></pre><p><br/><br/></br/></br/></p>
<p><b>Output:</b><br/><br/></br/></br/></p>
<pre><code>Not possible to make a rod of length 25 from the given set of rods</code></pre><p><br/><br/></br/></br/></p>
</br/></br/></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>0.3 - 0.4 sec</td>
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