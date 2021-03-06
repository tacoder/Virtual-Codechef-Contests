<?php require("../../includes/header.php"); ?><h1>Diablo to the Rescue</h1><div class="content">
<h3>
Problem Statement:<br />
</h3>
<p>
Chef Bunny is among the best friends of Chef Diablo. Chef Bunny owns a chain of restaurants numbered 0,1,2....(N-1). The restaurants have various types of signature dishes, but the chefs who have an expertise on those dishes are minimum. So they have to travel to different outlets. Considering the increasing traffic in Byteland there is a lot of delay due to which customers are getting annoyed. To overcome this Chef Bunny thought of a plan. He started constructing special tunnels between outlets in which Chefs can travel both ways. The cost of making a tunnel is the difference between the IDs of the two outlets, i.e. abs(ID1-ID2). Chef Bunny is very rich and hence he is not cared about the expenditure and starts constructing the tunnels, on seeing this Chef Diablo stops Chef Bunny and tells him that he will build the other tunnels so that least amount of money is required in connecting all outlets(directly or via other outlets). Chef Diablo starts the task but there are huge number of outlets and he finds great difficulty in doing this task and hence turns to you for help. Given the number of outlets(N) and the number of tunnels built by Chef Bunny(M) you need to print the minimum number of tunnels that Chef Diablo has to built and the total cost. Also print the outlets between which a tunnel has to be made.
</p>
<h3>
Input:<br />
</h3>
<p>
First line consists of N and M denoting the number of outlets and the number of tunnels built by Chef Bunny respectively. Then M lines follow each consisting of 2 integers x and y denoting the outlets already connected by a tunnel.
</p>
<h3>
Output:<br />
</h3>
<p>
In the first line output 2 space separated numbers Num and C denoting the number of tunnels that Chef Diablo has to make and C is the total cost respectively. Then Num lines follow each line consisting of 2 space separated integers denoting the IDs of the outlets that are to be connected by a tunnel by Chef Diablo, if there are more than one ways, print lexicographically the smallest.
</p>
<h3>
Constraints:<br />
</h3>
<p>
1&lt;=N&lt;=2*10^4
</p>
<p>
0&lt;=M&lt;=5*10^5
</p>
<h3>
Sample Input:<br />
</h3>
<p>4 2</p>
<p>0 2</p>
<p>1 3</p>
<h3>
Sample Output:<br />
</h3>
<p>1 1</p>
<p>0 1</p>
<h3>
Explanation:<br />
</h3>
<p>
There are 4 outlets. Chef Bunny has built 2 tunnels connecting outlets 0,2 and outlets 1,3. Now we have two choices having least cost so that all outlets get connected to each other directly or via other outlets, i.e. to connect 0 and 1 or to connect 2 and 3 as both have cost 1, but we print "0 1" as it is lexicographically smaller. Printing "1 0" would be wrong as it is lexicographically greater than "0 1".
</p>
<h3>WARNING: LARGE INPUT FILES....PLS USE FASTER I/O METHODS!!!!</h3>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aadesh_99">aadesh_99</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2014</td>
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