<?php require("../../includes/header.php"); ?><h1>Seating Arrangements</h1><div class="content">

<p>
In a large gathering, the attendees were divided into groups. Each group had a two-alphabet code where each alphabet is between 'A' and 'Z' inclusive. All the attendees were supposed to sit in the lexicographical order of their respective group, i.e. group 'AA' was supposed to sit before 'AB' and so on. Suppose there are 10 seats and there are two groups, 'AA' and 'AB' with 4 and 6 attendees in each group respectively. Group 'AA' members can sit from seat number 0 - 3 and 'AB' members can sit between 4 - 9. <br /><br /><br />
However, the attendees sat randomly. The management has now decided to check randomly, and fine those who are not sitting in the range of seats alloted to their group. Suppose if an AB group member is sitting on seat number 3, he will be fined but any AB member in the seat numbers 4 - 9 won't be. </p>
<h3>Input</h3>
<p>
1.The first input will be an integer N. (1 &lt;= N &lt;= 2000000) N lines follow. The ith line describes the two-alphabet group code of the person sitting on the ith seat. <br /><br />
2.The following line would have the integer K, which denotes the number of people to be checked. (1 &lt;= K &lt;= 1000) <br /><br />
3.K lines follow. On the ith line, the input is an integer which lies between 0 and N-1 inclusive. The person sitting at the seat number equal to the ith integer would be inspected if he/she is sitting in the range of seats allotted to the group to which he/she belongs. <br /></p>
<h3>Output</h3>
<p>
Process the K integers sequentially. Print "NO" for the ith integer (amongst the K integers) if the person sitting at the seat number equal to that value belongs to his/her group's seating plan, else print "YES". Print every result on a new line. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
AA
AB
AB
AC
ZZ
3
0
1
2
<b>Output:</b>
NO
NO
NO
<b>Explanation</b>Everybody is sitting in the correct positions. No one is fined. 

<br />

<b>Input:</b>
5
ZZ
AC
AB
AA
AA
3
0
1
2
<b>Output:</b>
YES
YES
NO
<b>Explanation</b>No one is sitting in the correct positions, except one person from the group AB. Anyone else who is inspected is fined. 

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/csirubix">csirubix</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>