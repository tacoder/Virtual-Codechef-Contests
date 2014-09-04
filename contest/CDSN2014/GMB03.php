<?php require("../../includes/header.php"); ?><h1>Buses and Taxis</h1><div class="content">
<p> </p>
<p>Our country has one of the largest networks of roads in the world. Buses offer an amazing way of commuting between different cities. We students love to travel by bus as they are convenient (and cheap too!!). The government has provided us with a great bus service. There are a number of buses running each day across different cities. An engineering student now wants to attend the International Conference on Advancement in Computing and Communication Engineering (ICACCE), which is being held in another city. When he reaches the bus station he finds a map containing the buses available between different cities. From the map he comes to know that some cities have a direct bus service between them while some of them don't (And there might be no direct bus servce available to his destination city). Now he has to travel to his destination city by changing buses between various cities. But there are some cities that do not have bus service towards his destination city. Then the poor student has no option but to hire a taxi towards his destination.<br />
 <br /><br /><br />
 For example buses are available between cities A-B, B-C, D-E, E-F where F is the final city. Now to go<br />
 from A to F he can use buses A-&gt;B, B-&gt;C, then hiring a taxi between C-&gt;D, then again using buses D-&gt;E, E-&gt;F. Now he can attend ICACCE.<br />
  <br /><br /><br />
  The program must check whether the student can travel only through bus(es) or through bus(es) and taxi(s) between the provided cities.<br />
<br /><br /><br />
<b># Note</b> that buses can go in either direction between cities so he can also travel from F to A.
</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of input consists of the number of test cases(T). <br />
</li><li>The first line of each test case will contain the total number of cities(C). The second line consists of number of bus services(B) available between different cities followed by the number of queries(Q) in the same line separated by a single whitespace.<br />
</li><li>The next B lines will contain names of two different cities between which there is an available bus service both separated by a whitespace. After that, Q lines will contain the name of two cities between which the student has to travel also separated by a single whitespace.
</li></ul>
<p><br /><br />
<b># Note</b> that city names will be integers ranging from 1 to C</p>
<p> </p>
<h3>Output</h3>
<p>The output of each test case must contain one of the two possibilities i.e. "only bus" or "bus and taxi".<br />
<br /></p>
<p> </p>
<h3>Constraints:</h3>
<h5>
<ul>
<li><b>1</b> ≤ <b>C</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>B,Q</b> ≤ <b>100</b></li>
</ul>
</h5>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2 
5
3 4
1 2
2 3
4 5
1 5
4 2 
5 4 
3 5
7		
5 3
1 2
3 4	
4 6	
5 7	
2 4	
1 6	
5 6	
3 1	

<b>Output:</b>
bus and taxi
bus and taxi
only bus	
bus and taxi
only bus	
bus and taxi
only bus
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gothicprakhar">gothicprakhar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-04-2014</td>
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