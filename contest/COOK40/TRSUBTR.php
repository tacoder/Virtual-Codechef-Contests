<?php require("../../includes/header.php"); ?><h1>Trees and Subtrees</h1><div class="content">
<h3>Read problems statements in Russian <a target="_blank" href="/download/translated/COOK40/russian/TRSUBTR.pdf">here</a></h3>
<p>The Head Chef has a reporting hierarchy for his chefs which is basically a binary tree i.e. Each chef reports to exactly one chef and every chef can take reporting of atmost two chefs . In case two chefs report to the same chef they must report at different times . The time of reporting can have only two values : Morning or Evening ( denoted by M and E , respectively ) .The Head Chef himself is not part of the reporting structure . The Head Chef has found that a new restaurant in Byteland is opening and it is hiring a group of chefs from some existing restaurant . The new restaurant will basically make an offer to one of the chefs and all the chefs directly or indirectly reporting to the chef . The Head Chef is worried that the new restaurant may be taking away some of his chefs . The Head Chef knows that the new restaurant will not change the reporting structure of the chefs . The Head Chef also has access to the reporting structure of the new restaurant in terms of ages of Chefs  . The Head Chef wants to know whether there is a need to worry or not . He needs to worry if the new restaurant can possibly be targetting his chefs .</p>
<p>In short given a tree <b> T</b> and another tree <b>O</b> you need to tell whether <b> O </b> is a subtree of <b> T </b> or not . The node values of <b> T </b> or <b> O </b> need not be distinct as they represent the age of the Chef . Also , a subtree of a rooted tree includes a particular node and the entire tree structure below it .</p>
<p>Two trees A and B are considered same if age(A-&gt;root ) = age(B-&gt;root) and subtree rooted at A-&gt;left is same as subtree rooted at B-&gt;left and subtree rooted at A-&gt;right is same as subtree rooted B-&gt;right .</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>N</b> denoting the number of chefs in Head Chef's restaurant. The Chefs are denoted by number <b>1</b> to <b>N </b>. </li>
<li> The next <b> N </b> lines contain ages of the chefs with the <b>i</b> th line containing the age of chef <b>i </b>. </li>
<li> The next <b> N - 1</b> lines contain two integers <b> A </b> and <b> B </b> and a character <b> C </b> which is either <b>'M'</b> or <b>'E'</b> where <b>A </b> denotes the senior chef and <b>B </b> denotes the reporting chef , and the character <b>C </b> denotes the time of reporting . </li>
<li>The next line of the input contains an integer <b>Q</b> denoting the number of queries/possible structures of chefs of new restaurant . This is followed by description of <b>Q</b> queries . </li>
<li>The first line of each query contains an integer <b>M</b> denoting the number of chefs in new restaurant. The Chefs are denoted by numbers <b>1 </b> to <b>M</b>. </li>
<li> The next <b> M </b> lines contain the ages of the chefs with the <b>i</b> th line denoting the age of chef <b> i </b>.</li>
<li> The next <b> M - 1</b> lines contain two integers <b> A </b> and <b> B </b> and a character <b> C </b> which is either <b>'M' </b> or <b>'E'</b> where <b>B </b> denotes the reporting chef and <b>A </b> denotes the chef who takes the reporting , and the character <b>C </b> denotes the time of reporting . </li>
</ul>
<h3>Output</h3>
<ul>
For each test case answer "YES" or "NO" as applicable . 
</ul>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>Age of Chef</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
1
2
1
1 2 M
1 3 E
2 4 E
3 5 M
2
2
1
2
1 2 M
2
1
1
1 2 M
<b>Output:</b>
NO
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rubanenko">rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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