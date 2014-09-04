<?php require("../../includes/header.php"); ?><h1>Candies and Milestones</h1><div class="content">

<table border="0">
<tbody>
<tr>
<td>
<p align="justify">Little Pratya loves collecting candies and she also likes playing games :). </p>
<p align="justify">Today Pratya is travelling in bus and she has a bag full of <b>N</b> candies. She looks outside the window and notices milestones with numbers written on them. She decides to play a game. She wants to select some initial <i>non-zero</i> number of candies from the bag and call it her collection of candies. When she sees a milestone on the way, she will add or remove some candies from her collection as following. </p>
<p> Let the previous milestone number be <b>a1</b> and the current milestone number be <b>a2</b>.
</p></td>
<td>
<p><img border="0" src="http://farm5.static.flickr.com/4097/5445555238_672c9bb466.jpg" width="142" height="165" alt="pratya1" /></p>
</td>
</tr>
</tbody>
</table>
<p><br/></br/></p>
<p> <b>a2 > a1 : </b>  Pratya adds ( a2 - a1 ) candies to her collection (thus, her bag of candies loses them). If the bag doesn't contain  at least ( a2 - a1 ) candies, she starts crying.  </p>
<p> <b>a2 &lt; a1 : </b> Pratya removes ( a1 - a2 ) candies from her collection (thus, her bag of candies gains them). If her collection doesn't contain  more than ( a1 - a2 ) candies, she starts crying.   </p>
<p> <b>a1 = a2 : </b> Pratya is bored to see the same number again and so she eats one of the candies from her collection. <br/></br/></p>

<p align="justify"> Moreover, Pratya always wants her candy collection to have at least one candy, otherwise she starts crying. Given the numbers written on all the milestones in order, find the minimum number of candies Pratya should select in the beginning so that she doesn't have to cry at all.  If it is not possible , print -1. Note that no change to the collection happens when she sees the first milestone.  </p>
<p></p>
<h3>Input</h3>
<p>The first line contain the number of test cases <b>T</b>. Each test case has two lines. The first line specifies <b>N</b> and <b>M</b>. <b>N</b> is the number of candies in the bag and <b>M</b> is the total number of milestones. Second line contains <b>M</b> integers, the numbers written on the milestones, in the order Pratya sees them.</p>
<p>^ is used for power.</p>
<p>T &lt;= 150 </p>
<p>1 &lt;= N &lt;= 10^7 </p>
<p>2 &lt;= M &lt;= 10^4 </p>
<p>Each milestone number will be between [-10^6,10^6]. </p>
<h3>Output</h3>
<p>For each test case output the minimum number of candies that should be selected from the bag or -1 if its not possible</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
10 5
1 5 1 -1 -2
2 5
1 5 1 -1 -2
100 3
1 2 3

<b>Output:</b>
4
-1
1
</pre><p>
<i>* There are multiple test sets, and the judge shows the <b>sum</b> of the time taken over all test sets of your submission, if Accepted.</i></p>
    </div><table border="0">
<tbody>
<tr>
<td>
<p align="justify">Little Pratya loves collecting candies and she also likes playing games :). </p>
<p align="justify">Today Pratya is travelling in bus and she has a bag full of <b>N</b> candies. She looks outside the window and notices milestones with numbers written on them. She decides to play a game. She wants to select some initial <i>non-zero</i> number of candies from the bag and call it her collection of candies. When she sees a milestone on the way, she will add or remove some candies from her collection as following. </p>
<p> Let the previous milestone number be <b>a1</b> and the current milestone number be <b>a2</b>.
</p></td>
<td>
<p><img border="0" src="http://farm5.static.flickr.com/4097/5445555238_672c9bb466.jpg" width="142" height="165" alt="pratya1" /></p>
</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>