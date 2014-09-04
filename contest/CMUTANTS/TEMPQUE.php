<?php require("../../includes/header.php"); ?><h1>Temple Queues</h1><div class="content">

<table border="0">
<tbody>
<tr>
<td>
<img src="http://farm6.static.flickr.com/5056/5472021008_bcb05d7fb5.jpg" width="230" height="146" alt="main-destinations-tirupati" />
</td>
<td>
<p align="justify">The <a href="http://en.wikipedia.org/wiki/Tirumala_Venkateswara_Temple" target="_blank">Tirumala temple </a> is the most visited place of worship in the world. As the number of pilgrims who visit the temple each day is very high, the head of the temple should keep monitoring the queue system. Today is another lovely day and he has started his work. There are <b>N</b> queues at the entrance of the temple and some of them are already filled with pilgrims. Each queue has a metal door at the beginning, which leads to the temple. When the door is opened, it allows only one pilgrim to get through it and it gets closed immediately after that. </p>
</td>
</tr>
</tbody>
</table>
<p align="justify">New pilgrims are rushing in to the queues and the head needs to monitor the current sizes of the queues and decide which doors to be opened. At any time, he wants to know how many queues currently have at least <b>X</b> pilgrims. He also decides an integer <b>Y</b> and wants to open the doors of all the queues having at least <b>Y</b> pilgrims at that time. You are the controller of the queue system and are following his instructions. Respond quickly and win yourself a big laddu (sweet) from him :) .</p>
<p><br/></br/></p>
<p>Read the input section for rest of the details. <br/><br/></br/></br/></p>
<h3>Input</h3>
<p>The first line contains two integers N and Q. N - The number of queues [ 1 &lt;= N &lt;= 100,000 ], Q - The number of queries [ 0 &lt;= Q &lt;= 500,000 ] . The second line contains N integers, which are the initial sizes of the queues. ith integer ( 1-based ) is the initial size of queue i  [ 0 &lt;= initial size &lt;= 100,000,000 ] <br/><br/></br/></br/></p>
<p>Each of the next Q lines is one of the following <br/></br/></p>
<p>1 A  [ One pilgrim enters the queue# A ( 1 &lt;= A &lt;= N ) ] <br/><br/></br/></br/></p>
<p>2 X  [ Find the number of queues having atleast X pilgrims currently ( 0 &lt;= X &lt;= 1,000,000,000 )  ] <br/> <br/></br/></br/></p>
<p>3 Y  [ Open the doors of all the queues having atleast Y pilgrims ( 1 &lt;= Y &lt;= 1,000,000,000 ), and thus allowing only one pilgrim to enter the temple from each of them ] <br/><br/></br/></br/></p>
<h3>Output</h3>
<p>For each query of type "2 X" , print the answer in a new line. <br/><br/></br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 6
20 30 10 50 40
2 31
1 2
2 31
3 11
2 20
2 50

<b>Output:</b>
2
3
3
0
</pre><p><br/></br/></p>
<p>Note : Large input, prefer using scanf / printf to cin / cout <br/><br/><br />
<i>There are multiple test sets, and the judge shows the <b>sum</b> of the time taken over all test sets of your submission, if Accepted.</i></br/></br/></p>
    </div><table border="0">
<tbody>
<tr>
<td>
<img src="http://farm6.static.flickr.com/5056/5472021008_bcb05d7fb5.jpg" width="230" height="146" alt="main-destinations-tirupati" />
</td>
<td>
<p align="justify">The <a href="http://en.wikipedia.org/wiki/Tirumala_Venkateswara_Temple" target="_blank">Tirumala temple </a> is the most visited place of worship in the world. As the number of pilgrims who visit the temple each day is very high, the head of the temple should keep monitoring the queue system. Today is another lovely day and he has started his work. There are <b>N</b> queues at the entrance of the temple and some of them are already filled with pilgrims. Each queue has a metal door at the beginning, which leads to the temple. When the door is opened, it allows only one pilgrim to get through it and it gets closed immediately after that. </p>
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
            <td>4-02-2011</td>
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