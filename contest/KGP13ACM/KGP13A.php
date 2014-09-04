<?php require("../../includes/header.php"); ?><h1>Election Campaign</h1><div class="content">
<p>A district in a state has <b>K</b> villages (numbered from 1 to <b>K</b>). In order to provide better road connectivity in the district, the government has connected all the villages with two-lane paved roads, However, to reduce costs, the roads are constructed such that while it is possible to go from any village to any other village using the paved roads, there is exactly one route between any two villages. In addition, <b>M</b> of these villages are also connected to the district headquarter directly using two-lane roads.</p>
<p>Elections are round the corner and a leader of a political party wishes to hold road shows in the villages. Since he does not have time to visit all the villages, he decides to go from the district headquarter to one of the villages that is connected to it, and then follow a path using the roads between the villages only, holding one road show at each village in the path as and when he reaches that village. Since he has to return to the district headquarter, he wishes to hold the last road show in a village that is again connected to the district headquarter. To save time, he also does not want to go through any village more than once.</p>
<p>Obviously, he cannot go through all the villages. To ensure that people in other villages (not on the path) are not deterred from coming to his road shows, he asks his assistant to chalk a route such that the sum total of the distances of any village from its closest village in the path is  minimized. The road show being still a week off, he asks his assistant to take all the time he wants, but make sure that he finds the correct path.</p>
<p>The assistant sets off to do this, trying to write a program to try out one-by-one all the different paths the leader can take and calculating the total distances people have to travel if a person in a village goes to the road show nearest to his village. Help him write this program.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b>. </p>
<p>For each test case, the first line contains the number of villages <b>K</b>. This is followed by <b>K</b> lines, with the j-th line containing the information about village j. The information for each village consists of (in this order): an integer <b>F</b> (0 if the village is not connected to the district headquarter, 1 if it is), an integer <b>D</b> indicating the number of other villages this village is directly linked to by road, followed by <b>D</b> pairs of integers (total 2D integers), with each pair containing the id (from 1 to <b>K</b>) of a village it is connected to and the distance (positive integer) from that village.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating the sum total of distance of all the villages from their closest village in the path chosen.</p>
<h3>Constraints</h3>
<p>0 &lt; N ≤ 3</p>
<p>0 &lt; K ≤ 50</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
0 3 2 10 3 8 4 15
1 1 1 10
1 1 1 8
1 2 1 15 5 12
0 1 4 12
7
0 2 2 5 6 20
0 3 1 5 4 10 5 5
1 1 6 3
1 1 2 10
0 1 2 5
1 3 1 20 7 10 3 3
1 1 6 10

<b>Output:</b>
Case 1: 20
Case 2: 8

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