<?php require("../../includes/header.php"); ?><h1>Social Network</h1><div class="content">

<p> </p>
<p>Social networking has become an epidemic in the current century. Nowadays these sites are being used to expand our network. For some people, growing their social network has become an addictive hobby like stamp collecting. </p>
<p>
Your task is to observe the interactions on such a website and keep track of the size of each person’s network. Assume that every friendship is mutual. If Aniket is Pranjal’s friend, then Pranjal is also Aniket’s friend.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains one integer specifying the number of test cases to follow. Each test case begins with a line containing an integer F, the number of friendships formed, which is no more than 100,000. Each of the following F lines contains the names of two people who have just become friends, separated by a space. A name is a string of 1 to 20 letters (uppercase or lowercase).</p>
<h3>Output</h3>
<p>Whenever a friendship is formed, print a line containing one integer, the number of people in the social network of the two people who have just become friends.</p>
<h3>Constraints</h3>
<pre>
 0&lt; T &lt; 10
 1&lt; F &lt; 99999
</pre><h3>Example</h3>
<pre><b>Input:</b>
1 
3 
Ankit Suraj
Suraj Birbal
Birbal Ramesh

<b>Output:</b>
2
3
4

</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3.3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>