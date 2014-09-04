<?php require("../../includes/header.php"); ?><h1>Web Hosting</h1><div class="content">
<h2>Problem Statement  </h2>
<p>Like many institutes of the world, Manipal is going to have it first social networking website. It is aimed at increasing positive interaction between teachers and students as well as within students. The website has been developed and has been tested by a group of students and teachers dedicated to the project. They decided that the website would be hosted outside MIT so that children can communicate even when they are outside MIT. This allowed communication between teachers and students even when they were not inside the campus.<br />
	However, when it came to hosting the website, everyone had a different opinion. While some wanted to host a website at a free of cost domain, some wanted to host it with the help a proper ISP. There were arguments even for things such as whether to give advertisements or not.<br />
	In the end, after hours of deadlock, it was decided that they will go for a “Partial Payment Domain”. This is a new scheme started by AirTel in Karnataka which allowed institutions to host websites on their servers by paying for only 4 of the 7 days per week. However, the service cannot be discontinued before 1 year from the date the agreement was signed and the four days will have to be selected in the beginning and cannot be changed during the year. Also on holidays, the server will have to be paid for due to excessive load. (Note: Sunday is not considered as a holiday unless it is explicitly mentioned)</p>
<p>	Since the project receives limited funding, it needed to make sure that it uses the money as efficiently as possible. Your job is to decide the four days on which the service should be paid so as to save as much money as possible.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line consists of an integer t (1&lt;=t&lt;=100), the number of test case. 			             t test cases follow.<br />
The first line of each test case is an integer n (1&lt;=n&lt;=365) denoting the number of holidays. n lines follow which will consist of three space separated integer d, m and y denoting the date of the holiday in dd mm yyyy format. The year may be normal or leap year. The holidays mentioned for one test case will always be of the same year. d and m can be single digit integers depending of the day and month, respectively. y is always a four digit number. d/m/y will  always be a valid date.
</p>
<h3>Output</h3>
<p> For each test case, print the four days in the order in which they appear in a week.<br />
Note: Sunday is considered to be the first day of the week.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4
3 5 2005
5 2 2005
20 8 2005
12 10 2005

<b>Output:</b>
Sunday
Tuesday
Wednesday
Saturday

</pre><p>
<br />
<br />
<b>Note : This problem has been inspired from previously solved questions.</b>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-04-2014</td>
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