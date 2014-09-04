<?php require("../../includes/header.php"); ?><h1>Toy Exchange</h1><div class="content">
<p>During the pre-puja bonanza, the Khelnacompany has put <b>K</b> different types (numbered from 1 to <b>K</b>) of Disney figurines in their hot-selling RC cars. You can find the Disney figurine only after you have bought a RC car and opened the box. Sumana just loves Khelnacompany’s cars and the Disney characters, and wants to collect as many different Disney figurines as possible.</p>
<p>So Sumana tries to trade some of the figurines she has with her <b>M </b>friends to get figurines that she does not have. Any of Sumana’s friends (say X) will trade a figurine with Sumana if  and only if X has a duplicate of that figurine, and Sumana gives X a figurine X does not have. Moreover, Sumana’s friends are not as crazy as Sumana about collecting figurines, so they don’t exchange any figurines among themselves; they just exchange with Sumana to make her happy.</p>
<p>Sumana is clever and has realized that in some cases it might be good to exchange a Disney figurine she has for another figurine of a type she already possesses, or trade off a figurine even if she has only one copy of it. Given that Sumana knows exactly how many figurines of each type each of her friends has, can you help her find the maximum number of different Disney figurines that she can get by trading figurines with her friends?</p>
<h3>Input</h3>
<p>The first line contains the number of tests cases <b>N</b></p>
<p>For each test case, the first line contains the value of <b>K</b> and <b>M</b>. The second line contains <b>K</b> integers, with the j-th integer indicating the number of figurines of type j that Sumana has. This is followed by <b>M</b> lines, one for each of Sumana’s <b>M</b> friends. Each of these lines contains <b>K</b> integers, with the j-th integer indicating the number of figurines of type j possessed by that friend. Note that Sumana or a friend may not possess any figurine of a particular type, in which case that number will be 0. </p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the maximum number of Disney figurines Sumana can collect.</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> &#8804; 3</p>
<p>0 &lt; <b>K</b> &#8804; 100</p>
<p>0 &lt; <b>M</b> &#8804; 100</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 1
3 0 0
1 3 3
4 2
3 3 0 0
0 0 3 0
1 1 0 2

<b>Output:</b>
Case 1: 1
Case 2: 4

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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