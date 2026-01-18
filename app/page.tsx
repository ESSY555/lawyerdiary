import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Alert, AlertDescription, AlertTitle } from "@/components/ui/alert"
import { Badge } from "@/components/ui/badge"
import { Button } from "@/components/ui/button"
import { Calendar, Clock, TrendingUp, Users, FileText, AlertCircle } from "lucide-react"

export default function Home() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        {/* Header */}
        <div className="flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-[#334155]">Dashboard</h1>
            <p className="text-[#94a3b8] mt-1">Welcome back! Here's what's happening today.</p>
          </div>
          <Button className="bg-[#4338ca] hover:bg-[#4338ca]/90">
            New Case
          </Button>
        </div>

        {/* Alerts */}
        <Alert className="glass border-[#6366f1]/20">
          <AlertCircle className="h-4 w-4 text-[#6366f1]" />
          <AlertTitle className="text-[#4338ca]">Hearing Tomorrow</AlertTitle>
          <AlertDescription>
            You have a hearing scheduled for <strong>Case #2024-001</strong> tomorrow at 10:00 AM.
          </AlertDescription>
        </Alert>

        {/* Stats Grid */}
        <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
          <Card className="glass">
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm font-medium text-[#94a3b8]">
                Active Cases
              </CardTitle>
              <FileText className="h-4 w-4 text-[#6366f1]" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl font-bold text-[#334155]">10,234</div>
              <p className="text-xs text-[#94a3b8] mt-1">
                <span className="text-[#16a34a]">+12%</span> from last month
              </p>
            </CardContent>
          </Card>

          <Card className="glass">
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm font-medium text-[#94a3b8]">
                Upcoming Hearings
              </CardTitle>
              <Calendar className="h-4 w-4 text-[#6366f1]" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl font-bold text-[#334155]">24</div>
              <p className="text-xs text-[#94a3b8] mt-1">
                <span className="text-[#16a34a]">+3</span> this week
              </p>
            </CardContent>
          </Card>

          <Card className="glass">
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm font-medium text-[#94a3b8]">
                Total Clients
              </CardTitle>
              <Users className="h-4 w-4 text-[#6366f1]" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl font-bold text-[#334155]">1,429</div>
              <p className="text-xs text-[#94a3b8] mt-1">
                <span className="text-[#16a34a]">+8%</span> from last month
              </p>
            </CardContent>
          </Card>

          <Card className="glass">
            <CardHeader className="flex flex-row items-center justify-between space-y-0 pb-2">
              <CardTitle className="text-sm font-medium text-[#94a3b8]">
                Success Rate
              </CardTitle>
              <TrendingUp className="h-4 w-4 text-[#6366f1]" />
            </CardHeader>
            <CardContent>
              <div className="text-2xl font-bold text-[#334155]">94.2%</div>
              <p className="text-xs text-[#94a3b8] mt-1">
                <span className="text-[#16a34a]">+2.1%</span> improvement
              </p>
            </CardContent>
          </Card>
        </div>

        {/* Main Content Grid */}
        <div className="grid gap-4 md:grid-cols-2 lg:grid-cols-7">
          <Card className="glass col-span-4">
            <CardHeader>
              <CardTitle>Recent Cases</CardTitle>
              <CardDescription>
                Your most recent case updates and activities
              </CardDescription>
            </CardHeader>
            <CardContent>
              <div className="space-y-4">
                {[
                  { id: 1, name: "Ahmed vs. State", status: "Active", date: "2024-01-15" },
                  { id: 2, name: "Fatima Enterprises", status: "Pending", date: "2024-01-14" },
                  { id: 3, name: "Property Dispute #2024", status: "Active", date: "2024-01-13" },
                ].map((caseItem) => (
                  <div
                    key={caseItem.id}
                    className="flex items-center justify-between rounded-lg border border-white/20 p-4 glass"
                  >
                    <div>
                      <p className="font-medium text-[#334155]">{caseItem.name}</p>
                      <p className="text-sm text-[#94a3b8]">{caseItem.date}</p>
                    </div>
                    <Badge
                      variant={caseItem.status === "Active" ? "default" : "secondary"}
                      className={
                        caseItem.status === "Active"
                          ? "bg-[#4338ca] text-white"
                          : "bg-[#94a3b8]/20 text-[#94a3b8]"
                      }
                    >
                      {caseItem.status}
                    </Badge>
                  </div>
                ))}
              </div>
            </CardContent>
          </Card>

          <Card className="glass col-span-3">
            <CardHeader>
              <CardTitle>Today's Schedule</CardTitle>
              <CardDescription>Your appointments and hearings for today</CardDescription>
            </CardHeader>
            <CardContent>
              <div className="space-y-4">
                <div className="flex items-start gap-4 rounded-lg border border-white/20 p-4 glass">
                  <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                    <Clock className="h-5 w-5 text-[#4338ca]" />
                  </div>
                  <div className="flex-1">
                    <p className="font-medium text-[#334155]">Client Consultation</p>
                    <p className="text-sm text-[#94a3b8]">10:00 AM - 11:00 AM</p>
                  </div>
                </div>
                <div className="flex items-start gap-4 rounded-lg border border-white/20 p-4 glass">
                  <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#6366f1]/20">
                    <Calendar className="h-5 w-5 text-[#6366f1]" />
                  </div>
                  <div className="flex-1">
                    <p className="font-medium text-[#334155]">Court Hearing</p>
                    <p className="text-sm text-[#94a3b8]">2:00 PM - 3:30 PM</p>
                  </div>
                </div>
                <div className="flex items-start gap-4 rounded-lg border border-white/20 p-4 glass">
                  <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#8b5cf6]/20">
                    <FileText className="h-5 w-5 text-[#8b5cf6]" />
                  </div>
                  <div className="flex-1">
                    <p className="font-medium text-[#334155]">Document Review</p>
                    <p className="text-sm text-[#94a3b8]">4:00 PM - 5:00 PM</p>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>
        </div>
      </div>
    </DashboardLayout>
  )
}
