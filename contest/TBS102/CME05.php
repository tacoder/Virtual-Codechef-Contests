<?php require("../../includes/header.php"); ?><h1>Problem 5</h1><div class="content">

<p>
Ravi Sharma is a geek ,pursuing his B-Tech in one of the prestigious institutes of India. His birthday falls on 18th of December. This time on his birthday he decided to take all his 14  friends to watch ‘Avatar’, the most expensive movie ever released on the silver screen. So he along with his friends went to a nearby popular theatre but were shocked to see a very long queue on the Ticket Window. Even then Ravi joined the queue with hope of getting at least 3 tickets-one definitely for himself, another one for his girlfriend and remaining one for his best friend Sunny. And as said-“Fortune favours the brave.”He returned with three tickets. But now, all his friends wanted to see the movie with him and selecting some favorites out of them was always going to spoil the party.</p>
<p>On the back of Ravi’s mind ,it was there to take his girlfriend and Sunny to the movie but he was in a situation in which he could not express his feelings in front of his friends. So Ravi took out the solution to the problem by solving a Combinatorial problem in his mind. He told that all his friends will be playing a game the   two winners of which will be accompanying him to the movie. He told all his friends (including his girlfriend and friend Sunny) to stand in a circular manner and declared that every third person will get out until only two of them remained .</p>
<p>This problem asks you to determine which J positions out of  a circle of M should be chosen so that the J people will always remain ,if every kth person is out. Write on one line the positions which should be chosen for J people to be the winners in order that they would be chosen for termination should the activity have continued.</p>
<h3>Input</h3>

<p>
The first line contains the number of test cases. The following lines contain the data. The data will consist of triples (M,K,J positive integers such that M&gt;J) </p>
<h3>Output</h3>

<p>
For example:</p>
<p>a)In the case given ,which position should his girlfriend and his friend Sunny should take if they are the last 2 persons remaining out of 14 persons if every third person gets out.<br />
2)If the input is 10,2,5 which positions should be taken if 5 persons are to remain and every 2nd person is out?</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
41 3 2 

<b>Output:</b>
16 31
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vishesh_sigma">vishesh_sigma</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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