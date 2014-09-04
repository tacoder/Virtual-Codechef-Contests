<?php require("../../includes/header.php"); ?><h1>No Strings Attached</h1><div class="content">
<p>It is a well-known fact that Abhik and Sahitya gossip a lot! In fact, they gossip so much that they hardly remember about whom they gossip. Knowing this Godi proposes a game so that indirectly he can extract out as much information as possible from them. The game he proposes is as follows: </p>
<p>He asks Abhik and Sahitya to each give an integer ni and a string si of length ni. si is the person each wishes to gossip about. More precisely Abhik gives an integer n1 and a string s1, while Sahitya gives an integer n2 and a string s2. Godi gives them a number K. Now he wants them to together calculate the length of the longest common subsequence among the two strings after some substring of length K removed from both of them. The segments of the strings removed need not be same(Of course, Abhik and Sahitya aren't the same hence, it is only appropriate the segments they remove differ as much as possible). Godi being the troll he is, he sometimes gives K which is larger than n1 or n2. In such cases the game ends with Abhik and Sahitya beating Godi up.</p>
<p>Since Abhik and Sahitya want to utilize their time gossiping , they outsource their job to you. Given, n1,n2, s2,s2,K you should report the length of longest possible common subsequence of the two strings s1 and s2 after removing the substring as described above.</p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three integers <b>N1, N2, K</b> denoting the length of string <b>S1</b>,<b>S2</b> and the substring length to be eliminated respectively.<br />
The next two lines contains two strings <b>S1</b> and <b>S2</b> respectively.
</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output a single integer containing the length of the largest possible common subsequence after eliminating K length substrings from each. If a K length substring is not removable in either S1 or S2, print <b>-1</b></li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> &lt;= <b>N1,N2</b> &lt;= <b>5000</b></li>
<li><b>0</b> &lt;= <b>K</b> &lt;= <b>10^8</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 3 1
abd
cab

<b>Output:</b>
2
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
The different ways in which 1 length substring removal from string 1 gives {bd,ad,ab}.<br />
Similarly the different ways in which 1 length substring removal from string 2 gives {ca,ab,cb}<br />
The longest common subsequence between bd , ca is 0<br />
similarly bd,ab = 1 , bd,cb = 1 , ad,ca = 1 , ad,ab = 1, ad,cb = 0 , ab,ca = 1, ab,ab = 2,ab,cb = 1.<br />
Therefore , maximum among all of them is 2 and hence the answer is 2.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>