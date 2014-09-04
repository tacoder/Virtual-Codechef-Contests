<?php require("../../includes/header.php"); ?><h1>The Octopus</h1><div class="content">

<p> An Archaeopteryx and its family want to spend their weekend at Adventure Island. They see an Octopus ride. They want to enjoy it. However, there are some problems (as usual).</p>
<p>Each family member likes some other person in the family. Each member insists that he/she will go on the ride only if all the people whom that person likes and all the people who like him/her also go on the ride. But if he/she doesn't like anyone and no one likes him/her, he/she may come for the ride. </p>
<p>Ajitesh wants to help the dino family solve this dilemma, for which he wants your help. Given the weight of each family member, the list of people they like and the max weight that the Octopus can bear safely, calculate the max number of family members who can go on the octopus.</p>
<h3>Input</h3>
<p>There will be more than one test case with the max number being 50. For convenience the family members are numbered from 1 to n. Each test case begins with two integers n(1n&lt;=1000)and c(0&lt;=c&lt;=1000),where 'n' is the number of people in the family and 'c' the maximum capacity of the ride in kg. </p>
<p>On the next line three are 'n' integers with the kth integer giving the weight of the kth family member. The weights are positive and less than or equal to 200 kg. Then n lines follow with each line containing a sequence of integers separated by spaces. The first integer i gives the number of people in the family that person k likes, followed by the person(s) k likes. Each test case is separated by an empty line. The end of input is indicated by n=0 and c=0 and it should not be processed.</p>
<h3>Output</h3>
<p>For each test case, the output should contain the maximum number of people that can take the ride under the given conditions, on a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 210
50 50 50 50 50
1 2
1 3
0
1 5
1 4

8 600
80 80 80 80 80 80 80 80
1 2
1 3
1 4
1 5
1 6
1 7
1 8
1 1

0 0

<b>Output:</b>
3
0

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ajitesh14">ajitesh14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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