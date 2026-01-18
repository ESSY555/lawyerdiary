import { DashboardLayout } from "@/components/dashboard-layout"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { Link as LinkIcon, ExternalLink } from "lucide-react"

export default function LinksPage() {
  return (
    <DashboardLayout>
      <div className="space-y-6">
        <div className="flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-[#334155]">Useful Links</h1>
            <p className="text-[#94a3b8] mt-1">Quick access to important resources</p>
          </div>
          <Button className="bg-[#4338ca] hover:bg-[#4338ca]/90">Add Link</Button>
        </div>

        <Card className="glass">
          <CardHeader>
            <CardTitle>Saved Links</CardTitle>
            <CardDescription>Your collection of useful legal resources</CardDescription>
          </CardHeader>
          <CardContent>
            <div className="space-y-4">
              {[
                { name: "Supreme Court of Pakistan", url: "https://www.supremecourt.gov.pk" },
                { name: "Law & Justice Commission", url: "https://www.ljcp.gov.pk" },
                { name: "Pakistan Law Site", url: "https://www.pakistanlawsite.com" },
              ].map((link, index) => (
                <div
                  key={index}
                  className="flex items-center justify-between rounded-lg border border-white/20 p-4 glass"
                >
                  <div className="flex items-center gap-4">
                    <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-[#4338ca]/20">
                      <LinkIcon className="h-5 w-5 text-[#4338ca]" />
                    </div>
                    <div>
                      <p className="font-medium text-[#334155]">{link.name}</p>
                      <p className="text-sm text-[#94a3b8]">{link.url}</p>
                    </div>
                  </div>
                  <Button variant="ghost" size="icon">
                    <ExternalLink className="h-4 w-4" />
                  </Button>
                </div>
              ))}
            </div>
          </CardContent>
        </Card>
      </div>
    </DashboardLayout>
  )
}
