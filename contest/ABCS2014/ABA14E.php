<?php require("../../includes/header.php"); ?><h1>Grand Staircase</h1><div class="content">
<p> </p>
<p><b>Problem description.</b></p>
<p>The grand staircase often known as Hogwarts Staircase, is a massive structure in Hogwarts castle which is a moving staircase and can simply connect any floors at any point of time. Although there are witches and wizards they can’t jump multiple steps they can only take one step at a time. One day Hermione Granger and Harry potter are in hurry to meet professor Dumbledore but the mechanism of staircase suddenly collapsed and they need to go to the floor which is at a height “N”. As the entire Hogwarts is filled with magic, suddenly all the broken stairs turn to a block of alphabets of certain height(from 0 to N-1) in linear order from the floor(First block will be at the ground level). Being a wizard Harry with his spells tries to construct the staircase back but before that Hermione found the pattern. The pattern is that each of the blocks will produce some stairs of certain heights.  Harry finds that if there are two or more similar blocks, each of them will form a set of stairs whose heights are the difference between the total height N and the individual heights of the blocks.<br /> Say for example after the destruction of the staircase the blocks formed are aabc. So height of each block is in this order {0,1,2,3}. So after harry’s spell each unique block will start to form a set of stairs as mentioned above.  <br /><br />
  a will produce a stair set {3,4}; <br /><br />
   b will produce a stair set {2};  <br /><br />
  c will produce a stair set {1}. <br /><br />
“if an alphabet is present in two or more blocks, the stair set formation should be either increasing or decreasing and the same order should be followed for all such other blocks” <br /><br />
As soon as the sets are formed hermione’s spell will make all the stair sets to re-arrange according to the block’s original order (i.e) {3,4,3,4,2,1}. Help harry and Hermione to find the minimum number of stairs to be added to construct a stair case of increasing height with N stairs at difference of height 1 between consecutive stairs with the first stair at height 1 from ground level. The spell has the power only to add some stairs of some height or remove some stairs. <br /> In the above example, the spell can add two stairs of height 1 and 2 at the beginning and remove the last 4 stairs which leaves the stairs {1, 2, 3, 4}.  </p>
<p><br /><br />
<b>Input format:</b><br /><br />
   First line will have an integer T represents 1&lt;= T &lt;=100.<br /><br />
   Each  of the next T lines will have a string representing the blocks of alphabets which remains after the destruction of the staircase. String length &lt;= 99999<br /><br /><br />
<b>Output format:</b><br /><br />
  Print a single line containing the minimum number of stairs to be added for Harry to reach Dumbledore.<br /><br /><br />
<b>Sample Input:</b><br /><br />
1<br /><br />
aabc<br /><br /><br />
<b>Output:</b><br /><br />
2<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abacus_opc">abacus_opc</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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