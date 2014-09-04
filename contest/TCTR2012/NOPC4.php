<?php require("../../includes/header.php"); ?><h1>Relationship</h1><div class="content">

<p>In our increasingly interconnected world, it has been speculated that everyone on Earth is related to everyone else by no more than six degrees of separation. In this problem, you must write a program to find the maximum degree of separation for a network of people.<br />
For any two people, the degree of separation is the minimum number of relationships that must be traversed to connect the two people. For a network, the maximum degree of separation is the largest degree of separation between any two people in the network. If there is a pair of people in the network who are not connected by a chain of relationships, the network is disconnected.<br />
As shown below in example, a network can be described as a set of symmetric relationships each of which connects two people. A line can be assumed to represent a relationship between two people. Network in example 1 illustrates a network with 2 as the maximum degree of separation. Network in example 2 is disconnected.</p>
<h3>Input</h3>
<p> The input consists of data sets that describe networks of people. For each data set, the first line has two integers: P (2 &le; P &le; 50), the number of people in the network, and R (R &ge; 1), the number of network relationships. Following that first line are R relationships. Each relationship consists of two strings that are names of people in the network who are related. Names are unique and contain no blank spaces. Because a person may be related to more than one other person, a name may appear multiple times in a data set.<br />
The final test case is followed by a line containing two zeroes.<br />
For eg-<br />
consider a relationship in which<br />
A&lt;->B shows relationship between A and B<br />
Similarly, B is related to C i.e, B&lt;->C and C is related to D i.e, C&lt;->D. So, A is somehow related to D i.e,<br />
 A&lt;->B&lt;->C&lt;->D  and degree of separation is 3.</p>
<h3>Output</h3>
<p>
For each network, display the network number followed by the maximum degree of separation. If the network is disconnected, display DISCONNECTED. Use the format illustrated in the sample output.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4 4
A B
C D
B C
A C
<b>Output:</b>
2
<b>Input:</b>
4 2
A B
C D
<b>Output:</b>
DISCONNECTED

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bestankur007">bestankur007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-03-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>